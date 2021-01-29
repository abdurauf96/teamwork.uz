<form action="#" class="mt-3" wire:submit.prevent="sendMessage">
    <div class="site-inp">
        <input type="text" placeholder="@lang('messages.name')" wire:model="name" class="form_name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="site-inp">
        <input type="text" placeholder="@lang('messages.phone')" wire:model="phone" class="form_phone">
        @error('phone') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="site-textarea">
        <textarea name="textareaLoyiha" placeholder="@lang('messages.proj')" wire:model="message"></textarea>
    </div>

    <div class="form-faq mb-4 block-slug text-left">
        <span class="color-red">*</span> @lang('messages.msg_sent')
    </div>

    <button class="btn-submit send_message btn-more">@lang('messages.send')</button>
</form>