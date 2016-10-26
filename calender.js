 var CLIENT_ID ="704261988313-hcha50ojiei4uav5pkmacakltkcb3l1r.apps.googleusercontent.com"

 function checkAuth() {
        gapi.auth.authorize(
          {
            'client_id': CLIENT_ID,
            'scope': SCOPES.join(' '),
            'immediate': true
          }, handleAuthResult);
      }

 function loadCalendarApi() {
       gapi.client.load('calendar', 'v3', listUpcomingEvents);
     }
