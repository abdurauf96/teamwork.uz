<form class="con-page-form" action="#" wire:submit.prevent="sendMessage">
    <div class="page-form-title">
        @lang('messages.fill')
    </div>
    <div class="page-form-inp">
        <input type="text" placeholder="@lang('messages.name')" wire:model="name" class="form_name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="page-form-inp">
        <input type="text" placeholder="@lang('messages.phone')" wire:model="phone" class="form_phone">
        @error('phone') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="page-form-inp">
        <textarea name="XabarMatni" wire:model="message" placeholder="@lang('messages.msg')"></textarea>
    </div>

    <button type="submit" class="btn-more send_message">@lang('messages.send') <i class="ml-3 fas fa-paper-plane"></i></button>

</form>