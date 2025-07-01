<!-- <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

'serviceTypeId' => "4430731",
            'amount'=> "1000",
            'orderId'=> "0001",
            'payerName' => "Mustapha Muhd",
            'payerEmail' => "clrmuhammad@gmail.com",
            'payerPhone' => "08064247753",
            'description' => "Payment for Septmeber Fees",
            'username' => $request->username,
            'pass' => $request->pass,
<form  action="{{ route('storerrr') }}" method="POST">
    @csrf
  <div class="form-group">
  <label for="number" class="form-label">amount</label>
    
    <input type="number" name="amount" value="{{ old('amount') }}" >
   </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">order ID</label>
    
    <input type="orderId" name="number" value="{{ old('orderId') }}">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">payerName</label>
    
    <input type="name" name="username" value="{{ old('payerName') }}" >
   </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label"> Email address</label>
    
    <input type="email" name="payerEmail" value="{{ old('payerEmail') }}">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">payerPhone</label>
    
    <input type="number" name="payerPhone" value="{{ old('payerPhone') }}" >
   </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Description</label>
    
    <input type="description" name="description" value="{{ old('description') }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>