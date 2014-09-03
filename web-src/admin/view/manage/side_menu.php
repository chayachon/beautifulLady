<script>
    $(document).ready(function(){
        $('a').click(function(){
            var page = 'view/'+ this.id +'/index.php';

            $.post(page,function(data){
                document.getElementById('view').innerHTML = data;
            });

            return false;
        })
    });
</script>
<div class="side-menu clearfix">
    <h3>Manage Shop</h3>
    <ul>
        <li><a id="productType" href="">Product Type</a></li>
        <li><a id="product" href="#">Product</a></li>
        <li><a id="promotion" href="#">Promotion</a></li>
        <li><a id="slide" href="#">Slide</a></li>
        <li><a id="howToOrder" href="#">How to Order</a></li>
        <li><a id="faq" href="#">FAQ'S</a></li>
        <li><a id="contactUs" href="#">Contact us</a></li>
    </ul>

    <h3>Reports</h3>
    <ul>
        <li><a href="#">Order</a></li>
        <li><a href="#">Product</a></li>
    </ul>
</div>