
<html>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
     
    <div id='calendar'></div>
     
    <script>
    jSuites.calendar(document.getElementById('calendar'), {
        format: 'YYYY-MM-DD',
        onupdate: function(a,b) {
            document.getElementById('calendar-value').innerText = b;
        }
    });
    </script>
    </html>
    