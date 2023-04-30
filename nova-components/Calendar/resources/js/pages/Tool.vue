<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import axios from 'axios';

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data() {
    return {
      calendarOptions: {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        events: [
        ],
      }
    }
  },
  created() {
            this.getEvents();
        },
  methods: {
    getEvents() {
      axios.get('http://localhost:8000/nova-vendor/calendar/users')
        .then(response => {
            this.calendarOptions.events = response.data.users;
            });
        }
    }
}
</script>
<template>
  <FullCalendar
        :options='calendarOptions'
      >
      </FullCalendar>
</template>
