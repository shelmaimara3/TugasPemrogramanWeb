    <script type="text/javascript">
      function updateClock() {
        var now = new Date();
        var dname = now.getDay(),
          dnum = now.getDate(),
          mo = now.getMonth(),
          yr = now.getFullYear();

        Number.prototype.pad = function (digits) {
          for (var n = this.toString(); n.length < digits; n = 0 + n);
          return n;
        };

        var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        var ids = ["dayname", "daynum", "month", "year"];
        var values = [week[dname], dnum.pad(2), months[mo], yr];
        for (var i = 0; i < ids.length; i++) document.getElementById(ids[i]).firstChild.nodeValue = values[i];

        function initDay() {
          updateClock();
          window.setInterval("updateClock()", 1);
        }
      }
    </script>