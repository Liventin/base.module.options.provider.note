# base.module.options.provider.note

<table>
<tr>
<td>
<a href="https://github.com/Liventin/base.module">Bitrix Base Module</a>
</td>
</tr>
</table>

install | update

```
"require": {
    "liventin/base.module.options.provider.note": "dev-main"
}
"repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:liventin/base.module.options.provider.note"
    }
]
```
redirect (optional)
```
"extra": {
  "service-redirect": {
    "liventin/base.module.options.provider.note": "module.name",
  }
}
```

PhpStorm Live template
```
<?php

namespace ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Options;

use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Options\Option;

class NoteSample implements Option
{

    public static function getId(): string
    {
        return 'sample_note';
    }

    public static function getName(): string
    {
        return 'Пример заметки для настройки';
    }

    public static function getType(): string
    {
        return 'note';
    }

    public static function getTabId(): string
    {
        return TabMain::getId();
    }

    public static function getSort(): int
    {
        return 75;
    }

    public static function getParams(): array
    {
        return [];
    }
}
```