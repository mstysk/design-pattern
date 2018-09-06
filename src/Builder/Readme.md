# Builder パターン

## Builder 
インスタンスを作成するためのインタフェースを定めます。
- Builder

## ConcreteBuilder
Builderのインタフェースを実装しているクラス
- TextBuilder
- HtmlBuilder

## Director
Bulderのインタフェースを使ってインスタンスを生成します
ConcreteBuilderに依存したプログラムはいない。ConcreateBuilderが何であってもうまく機能するように、**Builderのメソッドのみ使う**
- Director

## Client
Builderパターンを利用する。
- Main

# 関連しているパターン
- Template Method パターン
- Composite パターン
- Abstract Factory パターン
- Facade パターン

# 思考
## 誰が何を知っているのか
オブジェクト指向プログラミングでは、「誰が何を知っているか」はとても大切です。すなわち、どのクラスがどのメソッドを使えるか（使ってよいか）に注意してプログラミングをする必要があります。  
サンプルプログラムでは、MainクラスはBuilderクラスのメソッドを知りません（呼び出しません）。Mainクラスは、Directorクラスの**construct**メソッドだけを呼び出します。するとDirectorクラスの中でむにゃむにゃ仕事が進み、文章が完成します。

一方、Directorクラスが知っているのはBuilderクラスです。DirectorクラスはBuilderクラスのメソッドを使って文書を構築します。しかしDirectorクラスは、自分が実際に利用しているクラスが「本当は」何なのかを知りません。TextBuilderなのかHtmlBuilderなのか、あるいはBuilderの他のサブクラスなのかを知りません。知らなくてもいいのです。DirectorクラスはBuilderクラスのメソッドだけ使っており、Builderクラスのサブクラスはそのメソッドを実装しているからです。

Directorクラスが自分の利用しているBuilderクラスのサブクラスを知らないのは、TextBuilderのインsたんスタンスをDirectorに与えても、HTMLBuilderのインスタンスをDirectorに与えても、正しく機能するのは、DirectorクラスがBuilderクラスの具体的なサブクラスを「知らない」からなのです。

知らないことからこそ、入れ替えができる。入れ替えられるからこそ、部品としてんも価値が高い。この「交換可能性」について、クラスの設計者は常に意識しておく必要があります。

## 設計時に決められること、決められないこと
Builderクラスは、文書を構築するのに（目的を達成するのに）必要かつ十分なメソッド群を宣言している必要があります。Directorクラスに与えられる道具は、Builderクラスが提供するものですから、Builderクラスのメソッドとして何を用意するかは大事ですね。

しかもBuilderクラスは、将来増えるかもしれないBuilderクラスのサブクラスたちの要求にも応える必要があります。サンプルプログラムでは、プレーンテキストとHTMLファイルだけを作りました。しかし、将来他の形式の文章を作りたくなったとしましょう。その時、果たして新しいBuilderクラスを作ることができるでしょうか。新たなメソッドが必要になったりしないでしょうか。

クラス設計者は神様ではありませんから、未来に怒ることを全て見通すことはできません。ただし、近い将来に怒ることが予想されている変化には耐えられるように設計を行う必要があるでしょう。

