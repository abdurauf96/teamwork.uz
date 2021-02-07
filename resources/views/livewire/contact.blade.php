<form class="con-page-form" action="#" wire:submit.prevent="sendMessage">
    <div class="page-form-title">
        @lang('messages.fill')
    </div>
    <div class="page-form-inp">
        <input type="text" placeholder="@lang('messages.name')" required oninvalid="this.setCustomValidity('@lang('messages.name_req')')"
        oninput="this.setCustomValidity('')" wire:model="name" class="form_name">
       
    </div>
    <div class="page-form-inp">
        <input type="text" required placeholder="@lang('messages.phone')" oninvalid="this.setCustomValidity('@lang('messages.name_req')')"
        oninput="this.setCustomValidity('')" wire:model="phone" class="form_phone">
        
    </div>
    <div class="page-form-inp">
        <textarea name="XabarMatni" wire:model="message"   placeholder="@lang('messages.msg')"></textarea>
    </div>

    <button type="submit" class="btn-more send_message">@lang('messages.send') <i class="ml-3 fas fa-paper-plane"></i></button>

</form>