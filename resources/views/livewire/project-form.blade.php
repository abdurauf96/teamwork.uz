<form action="#" class="mt-3" wire:submit.prevent="sendMessage">
    <div class="row">
      <div class="col-12 col-md-6 mb-3">
        <input type="text" placeholder="Ism" wire:model="name" class="form_name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="col-12 col-md-6 mb-3">
        <input type="text" placeholder="Telefon" wire:model="phone" class="form_phone">
        @error('phone') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="col-12 mb-3">
        <input type="text" placeholder="Email" wire:model="email" >
        
      </div>
    </div>
    <button class="btn-submit btn-more send_message" >Jo'natish </button>
  </form>
 