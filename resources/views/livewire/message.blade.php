<div>
    <form action="#" class="mt-3" wire:submit.prevent="sendMessage">
        <div class="site-inp">
            <input type="text" oninvalid="this.setCustomValidity('@lang('messages.name_req')')"
            oninput="this.setCustomValidity('')" placeholder="@lang('messages.name')" wire:model="name" required class="form_name">
            
        </div>
        <div class="site-inp">
            <input type="text" required oninvalid="this.setCustomValidity('@lang('messages.name_req')')"
            oninput="this.setCustomValidity('')" placeholder="@lang('messages.phone')" wire:model="phone" class="form_phone">
            
        </div>

        <div class="form-faq mb-4 block-slug text-left">
            <span class="color-red">*</span> Sizning murojaatingiz qabul qilingandan so'ng biz siz bilan bog'lanamiz va sizga qo'limizdan kelgancha ko'maklashamiz...
        </div>

        <button   class="btn-submit send_message btn-more" >@lang('messages.send') </button>
    </form>
</div>
