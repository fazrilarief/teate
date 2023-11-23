<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/chart-area-demo.js"></script>
<script src="/js/demo/chart-pie-demo.js"></script>

{{-- Datatables --}}
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>

{{-- Max Input Number --}}
<script>
    document.getElementById("nisInput").addEventListener("input", function() {
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10); // Membatasi input hingga 10 karakter
        }
    });
    document.getElementById("no_ponsel").addEventListener("input", function() {
        if (this.value.length > 12) {
            this.value = this.value.slice(0, 12); // Membatasi input hingga 10 karakter
        }
    });
</script>
