mobiscroll.setOptions({
    locale: mobiscroll.localeEs,
    theme: 'ios',
    themeVariant: 'light',
    clickToCreate: false,
    dragToCreate: false,
    dragToMove: false,
    dragToResize: false,
    eventDelete: false
});

$(function () {

    var inst = $('#demo-desktop-month-view').mobiscroll().eventcalendar({
        view: {
            calendar: { labels: true }
        },
        onEventClick: function (event, inst) {
            mobiscroll.toast({
                message: event.event.title
            });
        }
    }).mobiscroll('getInst');

    $.getJSON('https://trial.mobiscroll.com/events/?vers=5&callback=?', function (events) {
        inst.setEvents(events);
    }, 'jsonp');

});


var inst = $('#mycalendar').mobiscroll().eventcalendar({
    modules: [mobiscroll.print]
}).mobiscroll('getInst');
                                     
$('#print-button').on('click', function () {
    inst.print();
});