</div><!-- end row -->
</div> <!-- end container fluid -->

<footer class="text-center mb-0 py-3">
    <p>Made with <span style="color: #e25555;">&#9829;</span> by Achmad Fikri, Angga, Apriansa, Hulwa, Idzar  </p>
</footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/kasir/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    $(document).ready(function() {
    $('#table_barang').DataTable( {
    } );
} );

    </script>
</body>
</html>
