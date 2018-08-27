# FactroyMehtod パターン

```uml
module Framework {
    class Creator {
        create
        factoryMethod
    }
    class Product {
        method1
        mehtod2
        method3
    }
}
module Concreate{
    class Create {
        factoryMehtod
    }
    class Product {
        method1
        method2
        method3
    }
}

Framework.Create -> FreateWork.Product : Created
Concrete.Creator -> Framework.Creator
Concrete.Creator -> Concrete.Product
Concrete.Product -> Framework.Product
```

## 登場人物
### Product（製品）
このパターンで生成されるインスタンスが持つべきインタフェース（API）を定める抽象クラスです。具体的な内容は、サブクラスのConcrete.Productが定めます。
### Create
Productを生成する抽象クラスです。具tライ的な内容はサブクラスのConcrete.Createorが定めます。サンプルではFactoryクラスが務めてる
Createorは、実際に生成するConcreate.Productについて何も知りません。Creatorが知っているのは、Productとインスタンス生成のメソッド呼び出せば、Productが生成されるということだけ。サンプルではcreateProductメソッドがインスタンス生成ためのメソッドになっています。new による実際のインスタンス生成を、インスタンス生成のためのメソッド呼び出しに帰ることで、具体的なクラス名による束縛からスーパークラスを解放していることになります

### Concreate.Product
具体的なProduct。サンプルではIdCard

### Concrete.Creator
具体的なCreateor。サンプルでは、IdCardFactory

## インスタンス生成
createProduct メソッドの記述方法は3つあります

### 抽象メソッド

```php
abstract class Factory 
{
    abstract public function createProduct(string $name)
}
```
抽象メソッドにする方法。サブクラスはからナズこのメソッドを実装しなければならなくなる。


### デフォルト実装

```php
class Factory
{
    public function createProduct(string $name)
    {
        return new Product
    }
}
```

デフォルトを用意する方法。

### エラーにする

```php
class Factory
{
    public function createProduct(string $name)
    {
        throw new FactoryMethodRuntimeException();
    }
}
```

エラーにすることによって、実装されてないことを伝える

## パターン利用と開発者間の意思疎通
TemplateMethodパターンもFactoryMethodパターンも実際に行なっている操作のわりには複雑なプログラミングに感じられる。これは、1つのクラスを読んだだけでは動作がよく理解できないからです。スーパークラスで動作の骨組みを理解し、そこで使われれいる抽象メソッドが何かを見極め、さらに、その抽象メソッドが実際に実装しているクラスを読むことになります。
一般に、デザインパターンを使って、あるクラス群を設計する場合、そのクラス群の保守を行う人に、設計しゃの意図したデザインパターンがなんであるかうまく伝わるようにする必要があります。さもないと、設計者の最初の意図から離れた修正が加えられてしまう可能性があります。
プログラムのコメントや開発文書の中に、実際に使われているデザインパターンの名称と意図を記述しておくことはいいことです。

# 関連しているパターン
- TemplateMethodパターン
- Singleton パターン
- Composite パターン
- Iterator パターン
