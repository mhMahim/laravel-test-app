<div>
  <form action="{{ route('submit-form') }}" method="POST" class="flex flex-col gap-4">
    @csrf
    <input type="text" name="name" placeholder="Your Name" class="border p-2 rounded">
    <input type="email" name="email" placeholder="Your Email" class="border p-2 rounded">
    <textarea name="message" placeholder="Your Message" class="border p-2 rounded"></textarea>
    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Send</button>
</div>