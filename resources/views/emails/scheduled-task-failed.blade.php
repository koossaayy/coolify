<x-emails.layout>
{{ __('Scheduled task (') }}{{ $task->name }}{{ __(') was FAILED with the following error:') }}

<pre>
{{ $output }}
</pre>

Click [here]({{ $url }}{{ __(') to view the task.') }}
</x-emails.layout>
