 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Send Notification</h4>
                   <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/add_broadcast', $attributes); ?>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Message For</label>
                          <div class="col-sm-9">
                            <select name="msg_for" class="form-control" required="">
                             <option value="1">customer</option>
                             <option value="2">Artist</option>  
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required="" placeholder="Enter Title" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Message</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" name="msg" required="" placeholder="Enter Message"></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Broadcast</h4>
 
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  S. No
                </th>
                <th>
                 Title
                </th>
                <th>
                  Message
                </th>
                <th>
                  Send At
                </th>
              </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
             foreach ($coupon as $coupon) {
              $i++;
              ?>
              <tr>
                <td class="py-1">
                  <?php echo $i; ?>
                </td>
                <td>
                  <?php echo $coupon->title; ?>
                </td>
                <td>
                <?php echo $coupon->msg; ?>
                </td>
                <td>
                <?php echo date('M d, Y H:i:s', $coupon->created_at); ?>
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