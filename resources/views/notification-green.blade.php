<div class="notification green p-2 md:py-3">
  <div class="flex flex-row items-center justify-between space-y-0">
    <div class="font-bold">
      <span class="icon"><i class="mdi mdi-check-bold"></i></span>
      {{ $request->session()->get('status') }}
    </div>
      <span class="icon --jb-notification-dismiss hover:cursor-pointer"><i class="mdi mdi-close"></i></span>
  </div>
</div>