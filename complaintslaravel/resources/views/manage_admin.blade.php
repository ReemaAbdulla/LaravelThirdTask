@extends('layout')

@section('main')

 <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="card-header" style="background-color: #EEEEEE">Manage Admin</div>
                                    <div class="card-body" style="background-color: #F0F0F0" >
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Create Admin</h3>
                                        </div>
                                        <hr>
                                        <form action="manage_admin" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="admin_email" class="control-label mb-1">Admin Email</label>
                                                <input  name="admin_email" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="admin_password" class="control-label mb-1">Admin Pssword</label>
                                                <input  name="admin_password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="admin_fullname" class="control-label mb-1">Admin Full Name</label>
                                                <input  name="admin_fullname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                        <label >Admin Type</label>
                                                      <select name="admin_dept" id="admin_dept" class="form-control">
                                                    
                                              
                                                        <option value="Directorate of Administrative Affairs">Directorate of Administrative Affairs</option>
                                                        <option value="Directorate of Administrative Affairs>Directorate of Financial Affairs">Directorate of Administrative Affairs>Directorate of Financial Affairs</option>
                                                        <option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
                                                        <option value="Central Employment Directorate">Central Employment Directorate </option>
                                                        <option value="Central Labor Inspection Directorate">Central Labor Inspection Directorate </option>
                                                        <option value="Expatriate Employment Directorate">Expatriate Employment Directorate</option>
                                                        <option value="Directorate of International Cooperation">Directorate of International Cooperation</option>
                                                        <option value="Directorate of Women's Labor">Directorate of Women's Labor </option>
                                                        <option value="Media and Communication  and Public Relations Unit">Media and Communication  and Public Relations Unit </option>
                                                        <option value="Directorate of Information Technology and Electronic Transformation">Directorate of Information Technology and Electronic Transformation </option>
                                                        <option value="Unit management of productive branches">Unit management of productive branches </option>
                                                        <option value="Directorate of Occupational Safety and Health">Directorate of Occupational Safety and Health </option>
                                                        <option value="Coordination and Follow-up Unit">Coordination and Follow-up Unit </option>
                                                        <option value="Directorate of Occupational Work Regulation">Directorate of Occupational Work Regulation </option>

                                                    </select>  
                                               
                                                  </div>

                                            <div class="form-group">
                                                        <label >Admin Type</label>
                                                      <select name="admin_type" id="admin_type" class="form-control">
                                                        <option value="super">Super</option>
                                                        <option value="normal">Normal</option>
                                                    </select>  
                                               
                                                  </div>

                                            
                                             

                                           <center> <button name="submit" type="submit" class="btn btn-lg btn-info " style="width:30%">Save
                                               
                                            
                                                  

                                                </button>
                                                <input name="reset" type="reset" class="btn btn-lg  btn-danger btn-info " style="width:30%">  </center> 






                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                       
                        </div>

                    



                 <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>FullName</th>
                                                <th>Department</th>
                                                <th>Admin Type</th>
                                                <th> Created </th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($admins as $admin)
                                            <tr>
                                                <td> {{$admin['id']}}</td>
                                                <td> {{$admin['admin_email']}}</td>
                                                <td> {{$admin['admin_password']}}</td>
                                                <td> {{$admin['admin_fullname']}}</td>
                                                <td> {{$admin['admin_dept']}}</td>
                                                <td> {{$admin['admin_type']}}</td>
                                                <td> {{$admin['created_at']}}</td>
                                                <td> Edit </td>
                                                <td> Delete</td>



                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>



                            </div>
                </div>


@endsection