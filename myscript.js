var myCart=[]
function addDataToTable(){
    var itemName=$("select[name='item']").val()
    // console.log(itemName);
    var quantity=$("input[name='quantity']").val()
    var price=$("select[name='item'] option:selected").attr("price");
    var id=$("select[name='item'] option:selected").attr("myid");
    // console.log(quantity,price,id);
    var obj={"id":id,"itemName":itemName,"quantity":quantity,"price":price}
    myCart.push(obj)
    console.log(myCart);
    displayInTable()
} 
function displayInTable(){
var table="<table border=1>";
table+="<tr><th>id<th>itemName<th>quantity<th>price<th>total<th>Action</tr>"
var sumTotal=0;
for(var i=0;i<myCart.length;i++){
table+="<tr>";
 table+="<td>"+(i+1);
 table+="<td>"+myCart[i]['itemName']
 table+="<td>"+myCart[i]['quantity']
 table+="<td>"+myCart[i]['price']
 var total=myCart[i]['quantity']*myCart[i]['price'];
 sumTotal+=total;
 table+="<td>"+total
  table+="<td><button class='btn'  onclick='deleteDataFromTable("+(i)+")'>Delete</button>"
table+="</tr>";
}
table+="<tr>"
table+="<td align=center colspan=4>Total</td>"
table+="<td>"+sumTotal
table+="</tr>"
table+="</table>";
$("#tbl").html(table)

}

function deleteDataFromTable(i){
    event.preventDefault();
    myCart.splice(i,1);
    displayInTable()
}