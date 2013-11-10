# Composer Boilerplate

Clone this to get going with a new [composer](http://getcomposer.org/)
project!


## Installation

Simply clone this repo.

```shell
$ git clone https://github.com/clarkf/ComposerBoilerplate.git
MyProjectName
$ cd MyProjectName
```

## Configuration

1. Remove this README. _(Please replace it with a readme of your own.)_

    ~~~ sh
    $ rm README.md
    ~~~

2. Rename your namespace. _In the example below, "YAPF" has been chosen
   as the name._

    ~~~ sh
    $ mv src/{ProjectName,YAPF}
    $ mv tests/{ProjectName,YAPF}
    ~~~

3. Update `phpunit.xml`. Find all instances of `MyProject` in the file,
   and replace them with the new name. In vim, you could do:
    
    ~~~
    :%s/MyProject/YAPF/g
    ~~~

4. Update `composer.json`, and then install the dependencies:

    ~~~ sh
    $ vim composer.json
    $ composer update
    ~~~

## License

Does this really need a license?  I'll put MIT here, but if you run into
any obstacles file an issue and we can work it out

```
Copyright (C) 2013 Clark Fischer


Permission is hereby granted, free of charge, to any person obtaining a
copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```
