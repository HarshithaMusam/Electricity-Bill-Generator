<html>
<head>
<h1>ELECTRICITY BILL GENERATOR</h1>
<script>
   function bill(){
     var a=parseInt(document.getElementById("Lastmonth").value);
     var b=parseInt(document.getElementById("Currentmonth").value);
     var c=document.getElementById("Selectcategory").value;
      d=b-a;
     document.getElementById("Units").value=d;
     var e;
     if (c=="Domestic"){
         if (d<=50){
            e=d*1;
            document.getElementById("Billamount").value=e;
         }
         else if (d>50 && d<=60){
             e=(50*1)+((d-50)*1.10);
             document.getElementById("Billamount").value=e;
         }
         else{
             e=(50*1)+(10*1.10)+((d-60)*2);
             document.getElementById("Billamount").value=e;
         }
     }
     else if (c=="Business"){
         if (d<=50){
            e=d*2;
            document.getElementById("Billamount").value=e;
         }
         else if (d>50 && d<=60){
             e=(50*2)+((d-50)*2.50);
             document.getElementById("Billamount").value=e;
         }
         else{
             e=(50*2)+(10*2.50)+((d-60)*3);
             document.getElementById("Billamount").value=e;
         }
     }
     else if (c=="Industry"){
         if (d<=50){
            e=d*3;
            document.getElementById("Billamount").value=e;
         }
         else if (d>50 && d<=60){
             e=(50*3)+((d-50)*3.20);
             document.getElementById("Billamount").value=e;
         }
         else{
             e=(50*3)+(10*3.30)+((d-60)*4);
             document.getElementById("Billamount").value=e;
         }   
     }
     f=e*(13/100);
     document.getElementById("Tax").value=f;
     g=e+f;
     document.getElementById("Netamount").value=g;
     }
</script> 
</head>
<style>
.h{
margin-left:200px;
}
.e{
margin-left:200px;
}
</style>
<body>
<form action="bill.php" method="POST">
<label>Consumerno:</label>
<input type="number" id="Consumerno" name="Consumerno" required>&nbsp&nbsp&nbsp
<label>Lastmonth:</label>
<input type="number" id="Lastmonth" name="Lastmonth" required><br><br>
<label>Currentmonth:</label>
<input type="number" id="Currentmonth" name="Currentmonth" required>&nbsp&nbsp
<label>Selectcategory:</label>
<select id="Selectcategory" name="Selectcategory">
<option value="Select">Select</option>
<option value="Domestic">Domestic</option>
<option value="Business">Business</option>
<option value="Industry">Industry</option>
</select><br><br>
<button  onclick="bill()" class="h"> calculate </button><br><br>
<label>Units:</label>
<input type="number" id="Units" name="Units" required>&nbsp&nbsp&nbsp
<label>Billamount:</label>
<input type="text" id="Billamount" name="Billamount" required><br><br>
<label>Tax:&nbsp&nbsp</label>
<input type="text" id="Tax" name="Tax" required>&nbsp&nbsp&nbsp
<label>Netamount:</label>
<input type="text" id="Netamount" name="Netamount" required><br><br>
<input type="submit" value="Submit" name="submit" class="e">
</form>
</body>
</html>
