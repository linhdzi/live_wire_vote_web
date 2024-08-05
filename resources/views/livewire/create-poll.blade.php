<div>
    <!-- Be like water. -->
    <form  wire:submit.prevent="createPoll" >
        <label for="title">Poll Title</label>
        <input type="text" id="title" wire:model.live.debounce.150ms="title" />
      
      @error('title')
              <div class="text-red-500">{{ $message }}</div>
      @enderror
      
        <h1>  Current Title: {{$title}}</h1>
 <div class="mb-4 mt-4">
      <button class="btn" wire:click.prevent="addOption">Add Option</button>
    </div>

    <div>
      @foreach ($options as $index => $option)
        <div class="mb-4">
          

          <label>Option {{ $index + 1 }}</label>
          <div class="flex gap-2">
            <input type="text" wire:model="options.{{ $index }}" />
            <button class="btn"
              wire:click.prevent="removeOption({{ $index }})">Remove</button>
              @error("options.{$index}")
            <div class="text-red-500">{{ $message }}</div>
          @enderror
          </div>
        </div>
      @endforeach
    </div>
    <button type="submit" class="btn">Create Poll</button>
    </form>
   
  
    
</div>