<script type="text/javascript">
    $(document).ready(function() {
        console.log("{{ route('movie_list') }}")
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $(".yajra-datatable").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('movie_list') }}",
            responsive: true,


            columns: [

                {
                    data: "id",

                },
                {
                    data: "movie_title",

                },

                {
                    data: "movie_description"
                },

                {
                    data: "movie_genre",

                },

                {
                    data: "movie_time",

                },

                {
                    data: "movie_cinema",

                },


                {
                    data: "movie_date",

                },



                {
                    data: null,
                    orderable: false,
                    searchable: false,

                    render: function(data, type, row) {
                        return (
                            '<input type="button" value="Buy Ticket" class="btn waves-effect waves-light btn-info">'

                        );
                    }
                },





            ],


        });



    });
</script>
