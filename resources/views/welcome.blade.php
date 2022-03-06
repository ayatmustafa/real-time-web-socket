<!DOCTYPE html>

<html>

    <head>

        <title>Laravel WebSocket Example</title>

    </head>

    <body>

        <div id="div-data"></div>

        <script src='./js/app.js'></script>

        <script>


//  window.Echo = new Echo({
//      broadcaster: 'pusher',
//      key: process.env.MIX_PUSHER_APP_KEY,
//      cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//      wsHost: window.location.hostname,
//      wsPort: 6001,
//      forceTLS: false,
//      disableStats: true
//  });
            console.log(window.Echo);
            window.Echo.channel('EventTriggered')
            .listen('GetRequestEvent', (e) => {
                console.log(e)
                document.querySelector('#div-data').innerHTML = e.message
            })
        </script>

    </body>


</html>
