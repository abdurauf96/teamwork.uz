<form action="#" class="mt-3" wire:submit.prevent="sendMessage">
    <div class="row">
      <div class="col-12 col-md-6 mb-3">
        <input type="text" placeholder="@lang('messages.name')" wire:model="name" required oninvalid="this.setCustomValidity('@lang('messages.name_req')')"
        oninput="this.setCustomValidity('')" class="form_name">
        
      </div>
      <div class="col-12 col-md-6 mb-3">
        <input type="text" oninvalid="this.setCustomValidity('@lang('messages.name_req')')"
        oninput="this.setCustomValidity('')" placeholder="@lang('messages.phone')" wire:model="phone" required class="form_phone">
        
      </div>
      <div class="col-12 mb-3">
        <input type="text"  placeholder="Email" wire:model="email" >
        
      </div>
    </div>
    <button class="btn-submit btn-more send_message" >@lang('messages.send') </button>
  </form>
 