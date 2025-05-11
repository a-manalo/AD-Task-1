var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var today = new Date().getDay();
        var todayName = days[today];
        var boxes = document.querySelectorAll('[id^="day-box"]');
        var j = 0;
        while (j < boxes.length) {
            if (boxes[j].getAttribute('data-day') === todayName) {
                boxes[j].style.border = '5px solid #070F2B';
                boxes[j].style.backgroundColor = '#f8f9fa';
            }
            j++;
        }

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('quoteModal');
    var dayBoxes = document.querySelectorAll('[id^="day-box"]');
    for (var i = 0; i < dayBoxes.length; i++) {
        dayBoxes[i].addEventListener('click', function() {
            var day = this.getAttribute('data-day');
            var quote = this.getAttribute('data-quote');
            var modalDay = document.getElementById('modalDay');
            var modalQuote = document.getElementById('modalQuote');

            modalDay.textContent = day;
            modalQuote.textContent = quote;
            modal.style.display = 'flex';
        });
    }

    var closeButton = document.getElementById('close-button');
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
}); 