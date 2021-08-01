<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/response/response_vod.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class ResponseVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Volc\Service\Vod\Models\GPBMetadata\Base::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a190a1f766f642f726573706f6e73652f726573706f6e73655f766f642e70726f746f121e566f6c63656e67696e652e566f642e4d6f64656c732e526573706f6e73651a1b766f642f627573696e6573732f766f645f706c61792e70726f746f1a1c766f642f627573696e6573732f766f645f6d656469612e70726f746f1a1d766f642f627573696e6573732f766f645f75706c6f61642e70726f746f1a1f766f642f627573696e6573732f766f645f776f726b666c6f772e70726f746f22a2010a16566f64476574506c6179496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112400a06526573756c7418022001280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64506c6179496e666f4d6f64656c22b6010a1e566f644765744f726967696e616c506c6179496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124c0a06526573756c7418022001280b323c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744f726967696e616c506c6179496e666f526573756c7422ba010a20566f644765745072697661746544726d506c617941757468526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124e0a06526573756c7418022001280b323e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765745072697661746544726d506c617941757468526573756c7422b6010a1e566f64476574486c7344656372797074696f6e4b6579526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124c0a06526573756c7418022001280b323c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574486c7344656372797074696f6e4b6579526573756c74229f010a16566f6455706c6f61644d65646961526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461123d0a06526573756c7418022001280b322d2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436f6d6d69744461746122a6010a1e566f64517565727955706c6f61645461736b496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461123c0a06526573756c7418022001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6451756572794461746122a2010a14566f6455726c55706c6f6164526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112420a06526573756c7418022001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6455726c526573706f6e73654461746122ae010a1a566f644170706c7955706c6f6164496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112480a06526573756c7418022001280b32382e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644170706c7955706c6f6164496e666f526573756c7422b0010a1b566f64436f6d6d697455706c6f6164496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112490a06526573756c7418022001280b32392e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436f6d6d697455706c6f6164496e666f526573756c7422a8010a18566f644765744d65646961496e666f73526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112440a06526573756c7418022001280b32342e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744d65646961496e666f734461746122640a1a566f645570646174654d65646961496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122ae010a1f566f644765745265636f6d6d656e646564506f73746572526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112430a06526573756c7418022001280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574526563506f7374657244617461226d0a23566f645570646174654d656469615075626c697368537461747573526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122a4010a16566f6444656c6574654d65646961526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112420a06526573756c7418022001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6444656c6574654d656469614461746122ae010a1b566f6444656c6574655472616e73636f646573526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112470a06526573756c7418022001280b32372e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6444656c6574655472616e73636f6465734461746122a6010a17566f644765744d656469614c697374526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112430a06526573756c7418022001280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744d656469614c6973744461746122aa010a18566f645374617274576f726b666c6f77526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112460a06526573756c7418022001280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645374617274576f726b666c6f77526573756c7442cc010a29636f6d2e766f6c63656e67696e652e736572766963652e766f642e6d6f64656c2e726573706f6e7365420b566f64526573706f6e736550015a416769746875622e636f6d2f766f6c63656e67696e652f766f6c632d73646b2d676f6c616e672f736572766963652f766f642f6d6f64656c732f726573706f6e7365a00101d80101ca0220566f6c635c536572766963655c566f645c4d6f64656c735c526573706f6e7365e20223566f6c635c536572766963655c566f645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

