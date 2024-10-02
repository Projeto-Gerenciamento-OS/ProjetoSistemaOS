@extends('layouts.admin')

@section('content')

<head>
    <title>Agenda</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Agenda TC Sistemas</h3>
        <div class="card-body">
            <div id='calendar'></div>
        </div>
    </div>
</div>
  
<script>
  
    $(document).ready(function () {
          
        /*------------------------------------------
        --------------------------------------------
        Get Site URL
        --------------------------------------------
        --------------------------------------------*/
        var SITEURL = "{{ url('/') }}";
        
        /*------------------------------------------
        --------------------------------------------
        CSRF Token Setup
        --------------------------------------------
        --------------------------------------------*/
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          
        /*------------------------------------------
        --------------------------------------------
        FullCalender JS Code
        --------------------------------------------
        --------------------------------------------*/
        var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'agendaDay,agendaWeek,month'
        },
        events: SITEURL + "/fullcalender",
        selectable:true,
        selectHelper: true,
        displayEventTime: false,
        editable: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Titulo do Evento:');

            if(title)
            {
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                $.ajax({
                    url: SITEURL + "/fullcalenderAjax",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    success:function(data)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Evento Criado com sucesso");
                    }
                })
            }
        },
        editable:true,
        eventResize: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url: SITEURL + '/fullcalenderAjax',
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Evento Editado com sucesso");
                }
            })
        },
        eventDrop: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url: SITEURL + '/fullcalenderAjax',
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Evento Editado com sucesso");
                }
            })
        },

        eventClick:function(event)
        {
            if(confirm("Deseja Apagar o Evento?"))
            {
                var id = event.id;
                $.ajax({
                    url: SITEURL + '/fullcalenderAjax',
                    type:"POST",
                    data:{
                        id:id,
                        type:"delete"
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Evendo apagado com sucesso");
                    }
                })
            }
        }
    });

});
  
</script>
      

@endsection
