<x-emails.layout>
{{ __('Scheduled task (') }}{{ $task->name }}{{ __(') completed successfully with the following output:') }}

<pre>
{{ $output }}
</pre>

Click [here]({{ $url }}{{ __(') to view the task.') }}
</x-emails.layout>
