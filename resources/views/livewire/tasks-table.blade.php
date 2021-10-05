<table class="table table-responsive-sm table-striped">
                                
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>
                @if ($task->position > 1)
                <a wire:click.prevent="task_up({{ $task->id }})" href="#">
                    &#x21e7;
                </a>
                @endif
                @if ($task->position < $tasks->max('position'))
                <a wire:click.prevent="task_down({{ $task->id }})" href="#">
                    &#x21e9;
                </a>
                @endif
            </td>
            <td>{{ $task->name }}</td>
            <td>
                <a class="btn btn-sm btn-primary"
                    href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">
                        {{ __('Edit') }}
                </a>
                <form style="display: inline-block" 
                    action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-info" type="submit"
                        onclick="return confirm('{{ __('Are you sure?') }}') "
                    > {{ __('Delete') }}</button>

                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>