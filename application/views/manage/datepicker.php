<link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/jquery-ui/themes/base/jquery-ui.css'); ?>">
<script>
    $(function datepick() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange:'1950:2020',
            dateFormat: "yy-mm-dd",
            onSelect: function(datetext){
                var d = new Date(); 
                datetext=datetext+" "+d.getHours()+": "+d.getMinutes()+": "+d.getSeconds();
                $('#datepicker').val(datetext);
            },
        });
    });
</script>