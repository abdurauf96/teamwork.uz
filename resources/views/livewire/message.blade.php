<form action="#" class="mt-3" wire:submit.prevent="sendMessage">
    <div class="site-inp">
        <input type="text" placeholder="Ism" wire:model="name">
       
    </div>
    <div class="site-inp">
        <input type="text" placeholder="Telefon" wire:model="phone">
    </div>

    <div class="form-faq mb-4 block-slug text-left">
        <span class="color-red">*</span> Sizning murojaatingiz qabul qilingandan so'ng biz siz bilan bog'lanamiz va sizga qo'limizdan kelgancha ko'maklashamiz...
    </div>

    <button data-toggle="modal" data-target="#modalSucces" class="btn-submit btn-more" >Jo'natish </button>
</form>
