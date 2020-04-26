<template>
     <div id="calendar"></div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ],
            defaultView: 'dayGridWeek'
            });

          

        }
    }
</script>
