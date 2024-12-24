<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Family Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                 <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                       <label for="name" class="form-label">Name</label>  
                       <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="mb-3">
                       <label for="lastname" class="form-label">Last Name</label>  
                       <input type="text" class="form-control" id="lastname" name="lastname" >
                    </div>
                    <div class="mb-3">
                       <label for="birthdate" class="form-label">Birthdate</label>  
                       <input type="text" class="form-control" id="birthdate" name="birthdate" >
                    </div>
                    <div class="mb-3">
                       <label for="mobile_no" class="form-label">Mobile No</label>  
                       <input type="text" class="form-control" id="mobile_no" name="mobile_no" >
                    </div>
                    <div class="mb-3">
                       <label for="address" class="form-label">Address</label>  
                       <input type="text" class="form-control" id="address" name="address" >
                    </div>
                    
                    {{-- <div class="row">
                     <div class="mb-4 col-md-6">
                        <select name="city" class="form-control">
                           <option value="">City</option>
                           @foreach ($cities as $city)
                              <option value="{{ $cities->name }}">{{ $cities->name }}</option>
                           @endforeach
                        </select>
                        
                     </div>
                    </div> --}}

                    <div class="form-group">
                     <label for="city">City</label>
                     <select name="city" id="city" class="form-control">
                         <option value="">Select City</option> 
                     </select>
                 </div>
                   <div class="row">
                        <div class="mb-4 col-md-6">
                            <select data-mdb-select-init name="state" class="form-control">
                            <option value="">State</option>
                            @foreach ($states as $state )
                            <option value="{{ $state->name}}">{{ $state->name }}</option>
                               
                             @endforeach
                             
                          </select>
                         </div>
                     
                      </div>
                  <div class="mb-3">
                       <label for="pincode" class="form-label">Pincode</label>  
                       <input type="text" class="form-control" id="pincode" name="pincode" >
                    </div>
                 <div class="mb-3">
                       <label for="marital_status" class="form-label">Marital Status</label>  
                       <input type="text" class="form-control" id="marital_status" name="marital_status" >
                    </div> 
                    <div class="mb-3">
                       <label for="hobbies" class="form-label">Hobbies</label>  
                       <input type="text" class="form-control" id="hobbies" name="hobbies" >
                    </div>
                    
                    <button type="submit" class="btn-primary">Submit</button>
                 </form>
            </div>
                  
            
            
            <div class="col-sm-8">
                <table class="table-hover">
                  <thead>
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Address</th>
                        <th scope="col">State</th>
                        <th scope="col">City</th>
                        <th scope="col">Pincode</th>
                        <th scope="col">Marital Status</th>
                        <th scope="col">Hobbies</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($familys as $fam )
                        <tr>
                           <th>{{$fam->id}}</th>
                           <th>{{$fam->name}}</th>
                           <th>{{$fam->lastname}}</th>
                           <th>{{$fam->birthdate}}</th>
                           <th>{{$fam->mobile_no}}</th>
                           <th>{{$fam->address}}</th>
                           <th>{{$fam->state}}</th>
                           <th>{{$fam->city}}</th>
                           <th>{{$fam->pincode}}</th>
                           <th>{{$fam->marital_status}}</th>
                           <th>{{$fam->hobbies}}</th>
                           {{-- <td>
                              <a href="" class="btn btn-info btn-sm">Edit</a>
                              <a href="" class="btn btn-danger btn-sm">Delete</a>
                  
                           </td> --}}
                        </tr>
                     @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>