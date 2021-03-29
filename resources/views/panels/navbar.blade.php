<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
  <nav
    class="{{$configData['navbarMainClass']}} @if($configData['isNavbarDark']=== true) {{'navbar-dark'}} @elseif($configData['isNavbarDark']=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif" style="background: linear-gradient(45deg, #960948, #ece8ea) !important;">
      <div class="nav-wrapper">
          <ul class="navbar-list right">
              <li>
                <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                  data-target="profile-dropdown">
                  <span class="avatar-status avatar-online">
                      <span class="material-icons md-dark md-36">face</span>
                    <!--<img src="{{asset('images/avatar/avatar-7.png')}}" ><i></i>-->
                  </span>
                </a>
              </li>
          </ul>
          <!-- profile-dropdown-->
        <ul class="dropdown-content" id="profile-dropdown">
          <li>
            <a class="grey-text text-darken-1" href="{{asset('user-login')}}">
              <i class="material-icons">keyboard_tab</i>
              Logout
            </a>
          </li>
        </ul>
      </div>
  </nav>
</div>
<!-- search ul  -->
<ul class="display-none" id="default-search-main">
  <li class="auto-suggestion-title">
    <a class="collection-item" href="#">
      <h6 class="search-title">FILES</h6>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img src="{{asset('images/icon/pdf-image.png')}}" width="24" height="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">
              Two new item submitted</span>
            <small class="grey-text">Marketing Manager</small>
          </div>
        </div>
        <div class="status"><small class="grey-text">17kb</small></div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img src="{{asset('images/icon/doc-image.png')}}" width="24" height="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">52 Doc file Generator</span>
            <small class="grey-text">FontEnd Developer</small>
          </div>
        </div>
        <div class="status"><small class="grey-text">550kb</small></div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img src="{{asset('images/icon/xls-image.png')}}" width="24" height="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">25 Xls File Uploaded</span>
            <small class="grey-text">Digital Marketing Manager</small>
          </div>
        </div>
        <div class="status"><small class="grey-text">20kb</small></div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img src="{{asset('images/icon/jpg-image.png')}}" width="24" height="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">Anna Strong</span>
            <small class="grey-text">Web Designer</small>
          </div>
        </div>
        <div class="status"><small class="grey-text">37kb</small></div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion-title">
    <a class="collection-item" href="#">
      <h6 class="search-title">MEMBERS</h6>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img class="circle" src="{{asset('images/avatar/avatar-7.png')}}" width="30" alt="sample image"></div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">John Doe</span>
            <small class="grey-text">UI designer</small>
          </div>
        </div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img class="circle" src="{{asset('images/avatar/avatar-8.png')}}" width="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">Michal Clark</span>
            <small class="grey-text">FontEnd Developer</small>
          </div>
        </div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img class="circle" src="{{asset('images/avatar/avatar-10.png')}}" width="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">Milena Gibson</span>
            <small class="grey-text">Digital Marketing</small>
          </div>
        </div>
      </div>
    </a>
  </li>
  <li class="auto-suggestion">
    <a class="collection-item" href="#">
      <div class="display-flex">
        <div class="display-flex align-item-center flex-grow-1">
          <div class="avatar">
            <img class="circle" src="{{asset('images/avatar/avatar-12.png')}}" width="30" alt="sample image">
          </div>
          <div class="member-info display-flex flex-column">
            <span class="black-text">Anna Strong</span>
            <small class="grey-text">Web Designer</small>
          </div>
        </div>
      </div>
    </a>
  </li>
</ul>
<ul class="display-none" id="page-search-title">
  <li class="auto-suggestion-title">
    <a class="collection-item" href="#">
      <h6 class="search-title">PAGES</h6>
    </a>
  </li>
</ul>
<ul class="display-none" id="search-not-found">
  <li class="auto-suggestion">
    <a class="collection-item display-flex align-items-center" href="#">
      <span class="material-icons">error_outline</span>
      <span class="member-info">No results found.</span>
    </a>
  </li>
</ul>