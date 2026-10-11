@props(['type' => 'success', 'message'])

<div style="padding: 14px 16px; margin-bottom: 18px; border-left: 5px solid {{ $type === 'error' ? 'red' : 'green' }}; background: {{ $type === 'error' ? '#fdecea' : '#e8f5e9' }}; border-radius: 4px;">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>
