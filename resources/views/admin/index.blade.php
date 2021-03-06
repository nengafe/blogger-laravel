@extends('admin.layout')
@section('content')
<section class="panel">
   
</section>
<div class="row">

    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="pull-left">Message</div>
          <div class="widget-icons pull-right">
            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="panel-body">
          <!-- Widget content -->
          <div class="padd sscroll">

            <ul class="chats">

              <!-- Chat by us. Use the class "by-me". -->
              <li class="by-me">
                <!-- Use the class "pull-left" in avatar -->
                <div class="avatar pull-left">
                  <img src="img/user.jpg" alt="" />
                </div>

                <div class="chat-content">
                  <!-- In meta area, first include "name" and then "time" -->
                  <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                  Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                  <div class="clearfix"></div>
                </div>
              </li>

              <!-- Chat by other. Use the class "by-other". -->
              <li class="by-other">
                <!-- Use the class "pull-right" in avatar -->
                <div class="avatar pull-right">
                  <img src="img/user22.png" alt="" />
                </div>

                <div class="chat-content">
                  <!-- In the chat meta, first include "time" then "name" -->
                  <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                  Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                  <div class="clearfix"></div>
                </div>
              </li>

              <li class="by-me">
                <div class="avatar pull-left">
                  <img src="img/user.jpg" alt="" />
                </div>

                <div class="chat-content">
                  <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                  Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus
                  adipiscing elit.
                  <div class="clearfix"></div>
                </div>
              </li>

              <li class="by-other">
                <!-- Use the class "pull-right" in avatar -->
                <div class="avatar pull-right">
                  <img src="img/user22.png" alt="" />
                </div>

                <div class="chat-content">
                  <!-- In the chat meta, first include "time" then "name" -->
                  <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                  Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus
                  adipiscing elit.
                  <div class="clearfix"></div>
                </div>
              </li>

            </ul>

          </div>
          <!-- Widget footer -->
          <div class="widget-foot">

            <form class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Type your message here...">
              </div>
              <button type="submit" class="btn btn-info">Send</button>
            </form>


          </div>
        </div>


      </div>
    </div>
    <div class="col-md-8 portlets">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="pull-left">Quick Post</div>


        </div>
        <div class="panel-body">
          <div class="padd">

            <div class="form quick-post">
              <!-- Edit profile form (not working)-->
              <form class="form-horizontal">
                <!-- Title -->
                <div class="form-group">
                  <label class="control-label col-lg-2" for="title">Title</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="title">
                  </div>
                </div>
                <!-- Content -->
                <div class="form-group">
                  <label class="control-label col-lg-2" for="content">Content</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" id="content"></textarea>
                  </div>
                </div>
                <!-- Cateogry -->
                <div class="form-group">
                  <label class="control-label col-lg-2">Category</label>
                  <div class="col-lg-10">
                    <select class="form-control">
                      <option value="">- Choose Cateogry -</option>
                      <option value="1">General</option>
                      <option value="2">News</option>
                      <option value="3">Media</option>
                      <option value="4">Funny</option>
                    </select>
                  </div>
                </div>
                <!-- Tags -->
                <div class="form-group">
                  <label class="control-label col-lg-2" for="tags">Tags</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="tags">
                  </div>
                </div>

                <!-- Buttons -->
                <div class="form-group">
                  <!-- Buttons -->
                  <div class="col-lg-offset-2 col-lg-9">
                    <button type="submit" class="btn btn-primary">Publish</button>
                    <button type="submit" class="btn btn-danger">Save Draft</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                </div>
              </form>
            </div>


          </div>
          <div class="widget-foot">
            <!-- Footer goes here -->
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection