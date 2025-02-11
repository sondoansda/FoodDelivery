<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thành viên</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Dashboard</a>
            </li>

            <li class="active">
                <strong>Quản lý thành viên</strong>
            </li>
        </ol>
    </div>
</div>

<div class="ibox float-e-margins">
     @include ("user.components.toolbox")
    <div class="ibox-content">
       @include ("user.components.filter") 
        <br>
        @include ("user.components.table")

        
    </div>
</div>

<script>
    $(document).ready(function() {
        var elems = document.querySelectorAll('.js-switch');
        elems.forEach(function(elem) {
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
        });

    });
</script>