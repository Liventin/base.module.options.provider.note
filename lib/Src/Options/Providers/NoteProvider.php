<?php
namespace Base\Module\Src\Options\Providers;

use Base\Module\Src\Options\Interface\OptionProvider;

class NoteProvider implements OptionProvider
{
    public function getType(): string
    {
        return 'note';
    }

    public function render(array $option, string $moduleId): string
    {
        return '<tr><td colspan="2" align="center"><div class="adm-info-message">' . htmlspecialcharsbx($option['name']) . '</div></td></tr>';
    }

    public function save(array $option, string $moduleId, mixed $value): void
    {
    }

    public function getParamsToArray(): array
    {
        return [];
    }
}
