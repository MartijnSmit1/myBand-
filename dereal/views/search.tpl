<form method="get">
    <input type="text" id="searchbox" name="search"/>
    <button class="button" id="searchbutton">Search</button>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        function makeAjaxRequest() {
            $.ajax({
                url: 'search_execute.php',
                type: 'get',
                datatype: 'html',
                data: {search: $('#searchbox').val()},
                success: function(response) {
                    alert("Success!");
                },
                error : function() {
                    alert("Something went wrong!");
                }
            });
        }

        $('#searchbutton').click(function(){
            makeAjaxRequest();
        });

        $('form').submit(function(e){
            e.preventDefault();
            makeAjaxRequest();
        });
    });