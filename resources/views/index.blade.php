<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
</head>
<body>
 
<nav class="navbar navbar-dark bg-dark">
 
    <span class="navbar-brand md-0 h1">Coffee Shop Pos</span>
 
</nav>
<div class="row">
 
    <div class="col-sm-3">
        <div class="container">
            <div class="list-group-item list-group-tem-action active">Item</div>
 
            <div class="panel-body bg-dark" style="color: white">
                <form id="tbl-project">
                    <table class="table table-bordered" style="color: white">
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Nuggets Fries">
                                <label>Nuggets Fries</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Village Fries">
                                <label>Village Fries</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Fries">
                                <label>Fries</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
 
                    </table>
 
 
                </form>
            </div>
 
 
 
 
        </div>
 
 
    </div>
 
    <div class="col-sm-3">
        <div class="container">
            <div class="list-group-item list-group-tem-action active">Drinks</div>
 
            <div class="panel-body bg-dark" style="color: white">
                <form id="tbl-project">
                    <table class="table table-bordered" style="color: white">
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Tea">
                                <label>Tea</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Coffee">
                                <label>Coffee</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Apple Juice">
                                <label>Apple Juice</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
                        <tr>
                            <td>
                                <input type="checkbox" name="pos" value="Orange Juice">
                                <label>Orange Juice</label>
                            </td>
 
                            <td> <input type="number" name="qty" id="qty"></td>
                        </tr>
 
                        <tr>
                            <td colspan="3" align="right">
 
                                <input type="button" class="btn btn-info"  value="Add" onclick="add()">
 
 
                            </td>
 
 
                        </tr>
 
 
 
 
                    </table>
 
 
                </form>
            </div>
 
 
 
 
        </div>
 
 
    </div>
 
 
 
 
 
 
    <div class="col-sm-4">
 
        <div class="container">
            <div class="list-group-item list-group-tem-action active">Add Products</div>
 
            <table id="tbl-item" class="table table-dark table-bordered" cellspacing="0" cellpadding="0" width="100%" align="center">
                <thead>
 
                <tr>
                        <th>Delete</th>
                         <th>Item</th>
                         <th>Price</th>
                         <th>Qty</th>
                         <th>Total</th>
                </tr>
 
                <tbody>
 
                </tbody>
            </table>
        </div>
 
    </div>
 
 
 
    <div class="col-sm-2">
        <div class="list-group-item list-group-tem-action active">Total</div>
        <div>
        <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total">
        </div>
 
        <div>
            <input type="button" class="btn btn-warning" id="reset" name="reset" value="Reset">
        </div>
 
    </div>
 
 
 
</div>
 
 
<script src="component/jquery/jquery.js"></script>
 
<script src="component/jquery/jquery.min.js"></script>
 
 
<script>
    var tot = 0;
    var total = 0;
 
 
 
    function add()
    {
 
 
        $("input[name='pos']:checked").each(function()
        {
 
            let check = $(this).val();
            var price = null;
 
 
            if(check == "Nuggets Fries")
            {
                price = 12;
            }
            else if(check == "Village Fries")
            {
                price = 15;
            }
            else if(check == "Fries")
            {
                price = 20;
 
            }
            else if(check == "Tea")
            {
                price = 25;
 
            }
            else if(check == "Coffee")
            {
                price = 35;
 
            }
            else if(check == "Apple Juice")
            {
                price = 45;
 
            }
            else if(check == "Orange Juice")
            {
                price = 50;
 
            }
 
 
            var qty = $(this).closest("tr").find('[name="qty"]').val() || 0;
 
            tot = qty * price;
 
            var table1 =
 
                "<tr>"+
                "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td> "  +
                "<td>" + check  +  "</td>"  +
                "<td>" + price  +  "</td>"  +
                "<td>" + qty  +  "</td>"  +
                "<td>" + tot  +  "</td>"  +
                "</tr>";
 
                 total += Number(tot);
                $('#total').val(total);
 
                $("#tbl-item tbody").append(table1);
 
        }
        );
 
 
    }
 
      function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
    }
 
 
 
    $('#reset').click(function()
        {
            location.reload();
        }
    );
 
</script>
 
</body>
 
</html>