<x-default-layout>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
   input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: none;
  border-bottom: 1px solid black;
  box-sizing: border-box;
}

button {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

*{
margin: 0;
padding: 0;
outline: none;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body{
display: flex;
align-items: center;
justify-content: center;
min-height: 100vh;
padding: 10px;
font-family: 'Poppins', sans-serif;
background: linear-gradient(115deg, #fcfcfc 10%, #fcfcfc 90%);

}

button:hover {
background-color: #45a049;
}
.container{
max-width: 800px;
background: #fff;
width: 800px;
padding: 25px 40px 10px 40px;
box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.container form{
padding: 30px 0 0 0;
}

.scrollable-container {
     max-height: 400px; /* Set the desired height for the scrollable container */
     overflow-y: auto;
 }

 .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 100%;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  position: relative;
}

.message {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.flex1{
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 5px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.input01 {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 5px;
}

.form label .input01 + span {
  position: absolute;
  left: 10px;
  top: 50px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input01:placeholder-shown + span {
  top: 40px;
  font-size: 0.9em;
}

.form label .input01:focus + span,.form label .input01:valid + span {
  top: 50px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input01:valid + span {
  color: green;
}

.fancy {
  background-color: transparent;
  border: 2px solid #cacaca;
  border-radius: 0px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: 390;
  letter-spacing: 2px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 8px 30px;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-transform: none;
  transition: all 0.3s ease-in-out;
  user-select: none;
  font-size: 13px;
}

.fancy::before {
  content: " ";
  width: 1.7rem;
  height: 2px;
  background: #cacaca;
  top: 50%;
  left: 1.5em;
  position: absolute;
  transform: translateY(-50%);
  transform: translateX(230%);
  transform-origin: center;
  transition: background 0.3s linear, width 0.3s linear;
}

.fancy .text {
  font-size: 1.125em;
  line-height: 1.33333em;
  padding-left: 2em;
  display: block;
  text-align: left;
  transition: all 0.3s ease-in-out;
  text-transform: lowercase;
  text-decoration: none;
  color: #818181;
  transform: translateX(30%);
}

.fancy .top-key {
  height: 2px;
  width: 1.5625rem;
  top: -2px;
  left: 0.625rem;
  position: absolute;
  background: white;
  transition: width 0.5s ease-out, left 0.3s ease-out;
}

.fancy .bottom-key-1 {
  height: 2px;
  width: 1.5625rem;
  right: 1.875rem;
  bottom: -2px;
  position: absolute;
  background: white;
  transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy .bottom-key-2 {
  height: 2px;
  width: 0.625rem;
  right: 0.625rem;
  bottom: -2px;
  position: absolute;
  background: white;
  transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy:hover {
  color: white;
  background: #45a049;
}

.fancy:hover::before {
  width: 1.5rem;
  background: white;
}

.fancy:hover .text {
  color: white;
  padding-left: 1.5em;
}

.fancy:hover .top-key {
  left: -2px;
  width: 0px;
}

.fancy:hover .bottom-key-1,
 .fancy:hover .bottom-key-2 {
  right: 0;
  width: 0;
}


</style> 
    
<form method="POST" action="{{ route('tcc.update', $tcc->id) }}">
    @csrf
    @method('PATCH')
    
    
     <div id="part1" class="flex1">
      <div class="flex ">
      <label>
          <input type="text" required="" placeholder=""  name="name" id="name" value="{{ $tcc->name }}" class="input">
          <span>Name</span>
      </label>

      <label>
          <input  placeholder="" type="text" name="rc" id="rc" value="{{ $tcc->rc }}" class ="input">
          <span>BN No.</span>
      </label>
    </div>  
          
  <label>
      <input placeholder="" name="date_of_incorporation" value="{{ $tcc->date_of_incorporation }}" id="date_of_incorporation" type="date" class="input">
      <span>Date of Incorporation</span>
  </label> 
  
   <label>
    <input required="" placeholder="" type="text" name="tin" value="{{ $tcc->tin }}" id="tin" class="input">
      <span>TIN</span>
  </label>
  <label>
    <input required="" placeholder="" type="text" name="business_address" value="{{ $tcc->business_address }}" id="business_address" class="input">
      <span>Address</span>
  </label>
  <label>
    <input required="" placeholder="" type="text" name="business_status" value="{{ $tcc->business_status }}" id="business_status" class="input">
      <span>Status</span>
  </label>

  
  <button class="fancy" type="button" onclick="showPart2()">
    <span class="top-key"></span>
    <span class="text">Proceed</span>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
  </button>
  </div>
  
  <div id="part2" style="display: none;">
 <div style="display: flex;">
     <!-- First column -->
     <div style="flex: 1; padding-right: 20px;">
         <div>
             <label for="Chargeableyr1">Total Chargeable Income 2021 (NGN):</label>
             <input type="text" name="Chargeableyr1" value="{{ $tcc->Chargeableyr1 }}" id="Chargeableyr1">
         </div>

         <div>
             <label for="taxpaidyr1">Tax paid 2021 (NGN):</label>
             <input type="text" name="taxpaidyr1" value="{{ $tcc->taxpaidyr1 }}" id="taxpaidyr1">
         </div>

         <div>
             <label for="receiptidyr1">Tax Receipt ID(RRR) 2021 (NGN):</label>
             <input type="text" name="receiptidyr1" value="{{ $tcc->receiptidyr1 }}"  id="receiptidyr1">
         </div>

         <div>
             <label for="issuedateyr1">Date of issue 2021 (NGN):</label>
             <input type="text" name="issuedateyr1" value="{{ $tcc->issuedateyr1 }}" id="issuedateyr1">
         </div>
     </div>
     
     <!-- Second column -->
     <div style="flex: 1; padding-right: 20px;">
         <div>
             <label for="Chargeableyr2">Total Chargeable Income 2022 (NGN):</label>
             <input type="text" name="Chargeableyr2" value="{{ $tcc->Chargeableyr2 }}" id="Chargeableyr2">
         </div>

         <div>
             <label for="taxpaidyr2">Tax paid 2022 (NGN):</label>
             <input type="text" name="taxpaidyr2" value="{{ $tcc->taxpaidyr2 }}" id="taxpaidyr2">
         </div>

         <div>
             <label for="issuedateyr2">Tax Receipt ID(RRR) 2022 (NGN):</label>
             <input type="text" name="issuedateyr2" value="{{ $tcc->issuedateyr2 }}" id="issuedateyr2">
         </div>

         <div>
             <label for="receiptidyr2">Date of issue 2022 (NGN):</label>
             <input type="text" name="receiptidyr2" value="{{ $tcc->receiptidyr2 }}" id="receiptidyr2">
         </div>
     </div>
     
      <!-- Third column -->
     <div style="flex: 1;">
         <div>
             <label for="Chargeableyr3">Total Chargeable Income 2023 (NGN):</label>
             <input type="text" name="Chargeableyr3" value="{{ $tcc->Chargeableyr3 }}" id="Chargeableyr3">
         </div>

         <div>
             <label for="taxpaidyr3">Tax paid 2023 (NGN):</label>
             <input type="text" name="taxpaidyr3" value="{{ $tcc->taxpaidyr3 }}" id="taxpaidyr3">
         </div>

         <div>
             <label for="receiptidyr3">Tax Receipt ID(RRR) 2023 (NGN):</label>
             <input type="text" name="receiptidyr3" value="{{ $tcc->receiptidyr3 }}" id="receiptidyr3">
         </div>

         <div>
             <label for="issuedateyr3">Date of issue 2023 (NGN):</label>
             <input type="text" name="issuedateyr3" value="{{ $tcc->issuedateyr3 }}" id="issuedateyr3">
         </div>
     </div>
     </div>
     
     <div style=display:;>
         <label for="tccType">Tax Outstanding (If Any) 2023 (NGN):</label>
         <input type="text" name="tccType" value="{{ $tcc->tccType }}" id="tccType">
     </div>
 
     <div>
         <label for="sourcrOfInc">Source Of Income:</label>
         <input type="text" name="sourcrOfInc" value="{{ $tcc->sourcrOfInc }}" id="sourcrOfInc">
     </div>
 
     <div>
         <label for="othercomment">Other Comments:</label>
         <input type="text" name="othercomment" value="{{ $tcc->othercomment }}" id="othercomment">
     </div>
 
     <div style="display: none;">
         <label for="certificateExpires">This Certificate Expires On:</label>
         <input type="date" name="certificateExpires" value="{{ $tcc->certificateExpires }}" id="certificateExpires">
     </div>
     <div>
         <button type="submit">Update</button>
     </div>
     <div>
        
     </div>
 </div>
 
   
    
    
</form>


 <script>
 function showPart2() {
     document.getElementById("part1").style.display = "none";
     document.getElementById("part2").style.display = "block";
 }

</script>


</x-default-layout>
