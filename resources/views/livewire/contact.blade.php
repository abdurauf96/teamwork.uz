<form class="con-page-form" action="#" wire:submit.prevent="sendMessage">
    <div class="page-form-title">
        Ma'lumotlaringizni to'ldiring
    </div>
    <div class="page-form-inp">
        <input type="text" placeholder="Ism" wire:model="name" class="form_name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="page-form-inp">
        <input type="text" placeholder="Telefon" wire:model="phone" class="form_phone">
        @error('phone') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="page-form-inp">
        <textarea name="XabarMatni" wire:model="message" placeholder="Xabar matni"></textarea>
    </div>

    <button type="submit" class="btn-more send_message">Jo'natish <i class="ml-3 fas fa-paper-plane"></i></button>

</form>