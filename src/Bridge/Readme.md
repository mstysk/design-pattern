# Bridge パターン

## Abstraction (抽象化)
- Displayクラス
- 基本的な機能だけ記述している

## RefinedAbstraction(改善した抽象化）
- CountDisplayクラス
- Abstractionに機能を追加

## Implementor (実装者)
- DisplayImplクラス
- 実装クラス階層の最上位のクラス

## ConcreteImplementor(具体的な実装者）
- StringDisplayImpleクラス
- ImplementorのAPIを実装する

# 分けておけば拡張するのが楽になる
Brigeパターンの特徴は「機能のクラス階層」と「実装のクラス階層」を分けている点。
2つの階層を分けておけば、それぞれのクラス階層を独立に拡張することが出来ます。

# 継承は固い結びつき、移譲は緩やかな結びつき
「継承」はクラスを拡張するために便利な方法ですが、クラス間の結びつきをがっちり固定してしまいます。
そして、この関係は、ソースコードを書き換えない限り変えることが出来ない、非常に固い結びつきです。
プログラムの必要に応じてクラス間の関係を切り替えたい時には、継承を使うのは不適切です。切り替えるたびにソースコードを変更するなんて、やってられない。このような時に「移譲」を使います。
サンプルでは、Displayクラスの中で移譲が使われてる。Displayクラスのimplフィールドには、実装のインスタンスが保持されていて、
- open の時、impl.rawOpenを呼び
- outputの時、impl.rawOutputを呼び
- closeの時、impl.rawCloseを呼ぶ

　という風に「たらい回し」しています。「仕事をやれ」と言われたら、「implお願い」です。これが移譲です。

# 関連パターン
## Template Methodパターン
## AbstractFactoryパターン
## Adapterパターン
