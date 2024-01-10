<?php

namespace FileGenerator;

use FileGenerator\Interface\GeneratorInterface;

use FileGenerator\Trait\Constructor;
use FileGenerator\Trait\Generate;
use FileGenerator\Trait\Directory;
use FileGenerator\Trait\File;
use FileGenerator\Trait\Text;

/**
 * 文字列と出力先を受け取り、HTMLを生成する
 * 
 * @package FileGenerator
 */
class Generator implements GeneratorInterface
{
    use Constructor;
    use Generate;

    use Directory;
    use File;
    use Text;
}
