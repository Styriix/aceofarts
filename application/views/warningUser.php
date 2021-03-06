<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
  
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Warning Users</h4>
 
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  S. No.
                </th>
                <th>
                  User
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Status
                </th>
                <th>
                  Warning 
                </th>
              </tr>
            </thead>
            <tbody>
            <?php $i=0; foreach ($user as $user) { $i++;
              ?>
              <tr>
               <td><?php echo $i; ?></td>
                <td class="py-1">
                <?php if($user->image)
                {
                  ?>
                   <img src="<?php echo  base_url().$user->image; ?>" width="42" height="42" alt="image"/>
                  <?php
                  }
                  else {
                    ?>
                    <img src="<?php echo  base_url('/assets/images/faces-clipart/pic-1.png' ); ?>" alt="image"/>
                    <?php
                     # code...
                   } 
                  ?>
                  
                </td>
                <td>
                  <?php echo ucfirst($user->name); ?><br>
                  <span style="color: #7d7b7b; font-size: 10px;"><?php if($user->role==1) { echo "Artist"; } if($user->role==2) { echo "User"; } ?></span>
                </td>
                <td>
                   <?php echo $user->email_id; ?>
                </td>
                 <td>
                 <?php if($user->status==1)
                 {
                   ?>
                 <label class="badge badge-teal">Active</label>
                 <?php
                  }
                  elseif($user->status==0) {
                     ?>
                 <label class="badge badge-danger">Deactive</label>
                 <?php
                   } ?>
                </td>
                <td>
                   <?php echo $user->count; ?>
                </td>
              </tr>
            <?php
              }
            ?>      
            </tbody>
          </table>
        </div>
      </div>
    </div>           
  </div>
</div>
<!-- content-wrapper ends -->
  