(function (win, doc) {
  'use strict';

  //exibir calendário
  function getCalendar(perfil, div) {

    if (doc.querySelector('.calendarUser')) {

      let calendarEl = doc.querySelector(div)
      let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          start: 'prev,next, today',
          center: 'title',
          end: 'dayGridMonth, timeGridWeek, timeGridDay '
        },
        buttonText: {
          today: 'Hoje',
          month: 'Mês',
          week: 'Semana',
          day: 'Dia'
        },
        droppable: true,
        editable: true,
        locale: 'pt-br'
        ,dateClick: function(info) {
          calendar.changeView('timeGrid', info.dateStr)
        }
        ,
        eventClick: function (info) {
          win.location.href = `/Calendario/views/user/editar.php?id=${info.event.id}`
        },
        events: '/Calendario/controllers/ControllerEvents.php',
        selectable: false,
        eventDrop: function (info) {
          resizeAndDrop(info);
        },
        eventResize: function (info) {
          resizeAndDrop(info);
        },
        select: async (arg) => {

          let response = await fetch('http://localhost/Calendario/controllers/ControllerSelectable.php', {
            method: 'post',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
            body: JSON.stringify({
              description: description,
              start: arg.start,
              end: arg.end
            })
          });
          if (response.status == 200) {
            window.location.href = "http://localhost/Calendario/views/user/"
          }
        }
      });
      calendar.render();
    } else if (doc.querySelector('.calendarManager')) {

      let calendarEl = doc.querySelector(div)
      let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          start: 'today, prev,next',
          center: 'title',
          end: 'dayGridMonth, timeGridWeek, timeGridDay '
        },
        buttonText: {
          today: 'Hoje',
          month: 'Mês',
          week: 'Semana',
          day: 'Dia'
        },
        droppable: true,
        editable: true,
        locale: 'pt-br',
        dateClick: function (info) {
          win.location.href = `/Calendario/views/user/add.php?id=${info.event.id}`
          // calendar.changeView('timeGrid',info.dateStr);
        },
        eventClick: function (info) {
          win.location.href = `/Calendario/views/manager/editar.php?id=${info.event.id}`
        },
        events: '/Calendario/controllers/ControllerEvents.php',
        selectable: true,
        eventDrop: function (info) {
          resizeAndDrop(info);
        },
        eventResize: function (info) {
          resizeAndDrop(info);
        },
        select: async (arg) => {

          let response = await fetch('http://localhost/Calendario/controllers/ControllerSelectable.php', {
            method: 'post',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
            body: JSON.stringify({
              title: title,
              start: arg.start,
              end: arg.end
            })
          });
          if (response.status == 200) {
            window.location.href = "http://localhost/Calendario/views/manager/"
          }
        }
      });
      calendar.render();
    }


  }

  if (doc.querySelector('.calendarUser')) {
    getCalendar('user', '.calendarUser');
  } else if (doc.querySelector('.calendarManager')) {
    getCalendar('manager', '.calendarManager');
  }

  if (doc.querySelector('#delete')) {
    let btn = doc.querySelector('#delete');
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      if (confirm("Deseja mesmo apagar este dado?")) {
        win.location.href = event.target.parentNode.href;
      }

    }, false)
  }
  // Arraste e redimensionamento de eventos
  async function resizeAndDrop(info) {
    let newDate = new Date(info.event.start);
    let month = ((newDate.getMonth() + 1) < 9) ? "0" + (newDate.getMonth() + 1) : newDate.getMonth() + 1;
    let day = ((newDate.getDate()) < 9) ? "0" + newDate.getDate() : newDate.getDate();
    let minutes = ((newDate.getMinutes()) < 9) ? "0" + newDate.getMinutes() : newDate.getMinutes();
    newDate = `${newDate.getFullYear()}-${month}-${day} ${newDate.getHours()}:${minutes}:00`;

    let newDateEnd = new Date(info.event.end);
    let monthEnd = ((newDateEnd.getMonth() + 1) < 9) ? "0" + (newDateEnd.getMonth() + 1) : newDateEnd.getMonth() + 1;
    let dayEnd = ((newDateEnd.getDate()) < 9) ? "0" + newDateEnd.getDate() : newDateEnd.getDate();
    let minutesEnd = ((newDateEnd.getMinutes()) < 9) ? "0" + newDateEnd.getMinutes() : newDateEnd.getMinutes();
    newDateEnd = `${newDateEnd.getFullYear()}-${monthEnd}-${dayEnd} ${newDateEnd.getHours()}:${minutesEnd}:00`;
    console.log(newDateEnd);

    let reqs = await fetch('http://localhost/Calendario/controllers/ControllerDrop.php', {
      method: 'post',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `id=${info.event.id}&start=${newDate}&end=${newDateEnd}`

    });
    let ress = await reqs.json();
  }
  
})(window, document);

