# Iterable Reproducer

Reproduces a possible issue with iterables. It seems because the array is empty it should not produce an error about mixed.

# Reproduce

```
$> composer install
$> vendor/bin/mago analyze
error[less-specific-nested-argument-type]: Argument type mismatch for argument #1 of `Rod\MagoGeneratorReproducer\App\File::foo`: expected `iterable<mixed, rod\magogeneratorreproducer\app\file>`, but provided type `ArrayIterator<array-key, mixed>` is less specific.
   ┌─ src/App/File.php:23:13
   │
22 │ ╭         $this->foo(
23 │ │             new \ArrayIterator([]),
   │ │             ^^^^^^^^^^^^^^^^^^^^^^ Provided type `ArrayIterator<array-key, mixed>` is too general due to nested `mixed`.
24 │ │         );
   │ ╰─────────' Arguments to this method are incorrect
   │
   = The structure contains `mixed`, making it incompatible.
   = Help: Provide a value that more precisely matches `iterable<mixed, rod\magogeneratorreproducer\app\file>` or adjust the parameter type.

error: found 1 issues: 1 error(s)
```
