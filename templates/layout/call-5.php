<style type="text/css">
.toolbar { background: var(--color-main); display: inline-block; width: 100%; padding:7px 10px; left: 0; bottom: 0; position: fixed; z-index: 9999999; height: auto;   box-shadow: 0 -1px 2px 1px #00000038; }
.toolbar ul { list-style: none; padding: 0; }
.toolbar ul li { text-align: center; float: left; width: calc(100% / 5); line-height: 1;list-style: none;}
.toolbar ul li a { display: inline-block; width: 100%; }
.toolbar ul li a img { height: 15px; width: auto; margin-bottom: 5px; }
.toolbar ul li a span { font-family: 'Roboto', sans-serif; font-weight: 400; color: #ffffff; font-size: 13px; display: block; }
.wrap_multiphone { display: none; position: absolute; bottom: 60px; left: 10px; border-radius: 10px; border: 1px solid #ddd; padding: 5px 20px; background: #fff;}
.wrap_multiphone a { color: #333 !important; display: block; line-height: 25px !important; }
</style>
<div class="toolbar">
	<ul>
		<li class="multiphone">
			<a  id="goidien" title="title" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline'])?>">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAApCAMAAACfvvDEAAAAqFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8j1z1tAAAAN3RSTlMAC/z5Ec4ZJQbk2vDXwYkDkA/0WklBOiLf08mYlXt3RzUwHxXDvbJzaWLr6LqpnE4sf9DFoYJTN4uk2AAAAhRJREFUOMuNk9eSqzAQRBXAmGzjCDbOAcf1ptv//2cXBcqkorYfJCGd0gytGSJlpI8VJX/QbA4g7lX2+C1ZjGgdtJFcYjgVFELR0yrvWTYOlBhmFe3vpysf4EG/DPoiShXVZ08Gs7iWOhJUqFdHyWaO21YtU3gS1Oi+ju59XNWtX1jLWaNHvYy8U2aohI/4onILtHTBjalQIXK5KdX5BWJmCMlbJpvoX7eyIxDvZK6Mi/hXlP5iALsUYeLBlodPPPPxG5MSyNWHFvWRUGEWIipOA6K1BF+TioYeVmL2MSJkDK+4UYA1TeEKB1ZY5Km7eCmPBdjQHZnIGEk+LnJeaIQTaeoid/e45uMWkbTYYlGvpSBhC8/AxcdRZU1OWNYwxYRv21TW5MXYtAUtQOXBQM4B5kPSKf1apB/jQbq1gC9jWC6CbtKwcVYpc2Td6Bh8q01ll250gLmq23MVpeNp3YsD7qFG8fuOdQUOtffo2YXvGcNDm/XBYdqNNtxE+FSrtQtnqsGA7Jsd+8GQ6i5PwH52Emxv7hErbg0/OfhJggp1mugy1CX0w6DAdvQfx90gmh0phzUa01oz3OBs2h4xxqq2tTPBz2Fb6T8a5bgEvl/1XWoibakBG2xgVJv5AKetcodLBjctndAD5jvSqtcdcAdWAfrtoDbhCMD8Xc/6w7EJe0Y6tF240HJ2pFv9ceDbzE3OyvT/vCY6B/wsvkQAAAAASUVORK5CYII=" alt="images">
				<span>Gọi điện</span>
			</a>
			 
		</li>
		<li>
			<a  id="sms" href="sms:<?=preg_replace('/[^0-9]/','',$optsetting['hotline'])?>" title="title">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAwCAMAAABzC0lBAAAAqFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8j1z1tAAAAN3RSTlMA+wP4KO3dgnZiDfTx07tcICTLv6CKGQjIuLJoLBTow6ybh1JCHNg+OzLPqJVuRjfjS3xXERaQbtd28gAAArpJREFUSMedled6o0AMRTV0TDXuvca9xCl73v/NFnsTjB0XNucHfIjvjkYS3JELtOW22nzVQZmrtn0oSTHmI5MLVOg+12pRAHgte7KPPz5eurtt1QL8Wu+xbrECrzptSJ7ymwW+oz1IV1N4du/Gi0kAzfierhTCsH5nza2HOb+ja6K7cpdygDe9uWaIv5AHlCp43RtxG30hD2k0mTXkmq6iI0+om4zlmiGhPCVCv25eDEt5zgr7KuIwkAK4zNL+HjTJaLEtIvyAujSxOpm0z16KELCTAZB8F6aoFxK2iGRIxUd97RB6hYRtXFmzrbdhdNquiVFI2GQiIVHaTUVVUhLei+g0D0MspqeZ4qS3WqovwBRf+4TSvwmq7jHiFbGWNSNxCeRESOvUZ/u5zlDspcLb1xOkKd/RjacVDtIce1SctXh8Sjx7ttkaelkGrM8fYJJe630qj5UOuNI5ir/o4knK3id5eeRkMJalzlsW6oF8Kc3JPV1cOerKr1S0LPaCnvkR7d5Nv7E9dPeos3Lv51jfrlJTt6Zi1HxIDJmavOaLsc99ksG189QP4xVgRaLZiiDOV23hnvtEuqSxWY/Hm2o7HMw8ANWaaDINYFi6tAMzM70q7XRlnTNqVo0+RaYt8N1rz3OyNikW5SaEzp8/ttOJJjujcQw7AajR56XLJqyyBm+oRD5+lKsjfq+tAH1U/uHrppFLaJ1PJSet0VIANDvXQ+rO8OZyrhDU+Dv/P42ejKIfo204Ov1l/qfB3GWPhz70I+3W8WtBWM+fAiT5OfU2CgLHuHFc9C8a7DFqXH0yIx14Hb69L5Zxeblza+HMboh9dc7MDzesu1NRXJLEBoU8sbRzqhWr7/v9oLXpuCbmvMVa/ps4QG1yKYtTagMMpTh5L4CF/IKOgoH8hokOk18p5yaW/IqulUjKX7xKXNy1UhxmAAAAAElFTkSuQmCC" alt="images">
				<span>SMS</span>
			</a>
		</li>
		<li>
			<a  id="chatzalo" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo'])?>" title="title">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGkAAAApCAMAAAABBPdkAAAAtFBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////oK74hAAAAO3RSTlMA8CBwoPj8wbBgLgLQ9QYnGVAz4UAN62oRlwi1WeaIgFTbRbySZTfUy6V3FQS5m9atqTxcSB1Lxox7dOIYiykAAATnSURBVFjDvVZpl6IwEAQ0UVkQBxRRAe/7vmYc6///rw1JRKNZ3763R30YmyTTlXRXd2L8I5wHg4Nl/A90wRDujlXjX+NjuP5KMrLrX+DyOy6CtPFmhdWcAVv/T4kGBBmcxvtVW5Bj/hUNKpWCikps/3hP1E5Q9pefAS76edN0WgPmozoCxmKoUaTQIfh4y/SJpJrtGaF+PgDD9pNZBdATH+oA/TLDrnhD9lVygfgdUxNlvk9gqZ3/UTukAbBh20kR1thIHWSgW9nYIHwnmwKK/Jfg12WzKrhYMydrzNnXN/urRdWE/xtMJvRM7nRkM32G2DANEniGsWBR0CP8IyYAtNU2JgQsVyO0GCvQ1EbpBLf9B0wNf0QwrLJ12x+GB5NxbADSd+44yow6GCkZfsekh52wo6wCMB1McWAuFgkeIU+ygJmLyr84Lljg/Wyv8XVc0zN5i50TBP11+lmVVITaRjeLXAsF0XgndYkFsOBDB4qxdDAp4YaOdTQB0FTDNPhCDjON+NiIxWUCh9UEo1OwDFAWRoK9lOCFgsx7VmT19oALOEXmsvvM1GCTtHM9+XZ9vEkA88g3iakRwTSMGHtV/yX0G4phNIbA/HwL/AxosYRVQCKV6bwFHdXynH44YmEDbqbCrKN0FKYLXE81qiW4Hw811upwZWxxUpiiPoKJop9veotXREy2N7laIgZ6qsEyaapFJXJdQqwwrRGcDRUxRVOysrPWeodHUbpIVcOoA6e8eQudS6bKI9MRxM7r6F4Grlb/PALDH3dDepQhsIohyFd+0QwVplWAhTxIicDcS9YSivre20EQ3Q0OG0Rk+YOAYycLpawwxQjbPLJzcNCxqA7Qpf6JQXzVYKbUvEfQmbTPC4KLjmkng52CfFttfwcq1OGgqXthABXFEEEaS8c7/tsDtTRMJrhni+KTD+1RkhvdvxJ5JlrSeGh3iejmS8C6UX+/MtVBVsKxrJkaFesH6L823im+qtzYckMCqImjzOTAGOtXpgqm3FpjfJcmPyTIC9MeiUj9jhsSK4BLY5GLqI7pK1NTBmuKuly2EVqMgGeiK+hBNnDCDQmKmgjL6B3TFcPfZRpQNFVDIgQvjaZIwN3Sn2n4HD3vOXpWiLk0nmpthp4sq6V0oVNEjL6U2lpVxAlb9Yk4g9OWxky9z4tIBeNblfugDanyHi/9cq5y9TG0gWnJboptKcdwczIqUnQTmlWu1SVIdZXbR+9WuV2rPemA+qJy83CqTfSIZ+zOFJ6YI+DYr3RMqQzbagcO+RCf8KDfsb4Ja/ChYDwiWJSxkR2waIKUYmZpmCyKw73DhkVPlvlT1l14hh5jbA+gvnodqEzyDdtCP59t3/+d8KwoNaOHBdeYI3iMgHJrzPM+EgX8UazgRHBVR6ZKCakZTDIffe9Bp80Kv7n6+IzhiJqhLHe+i5K64SZ5aa8FuM2z7r6yZ1mSvASkewuNPxUPkQJIVOOabq9FLR9MhA9P4cMQ2D+fctUBQMwkNAXCQPwSiBZYKwFuMbZrXlwGQort3EFWwBegswng2uIOmAFhq+dFkXXqOgC5ajbfdKCDO6+J+UofN8yXPRMA6WY3bBEMSf3mZhwgBylahharmmXbnmV5NkNmMZxX973U06+EhrPUyyTYK8RSJHbzu9d+2PJgNDMBdzqv6FT0E1Xa1G+AYXZmAAAAAElFTkSuQmCC" alt="images">
				<span>Zalo</span>
			</a>
		</li>
		<li>
			<a  id="chatfb" href="<?=$optsetting['fanpage']?>" title="title">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAyCAMAAADRAYN0AAAAqFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8j1z1tAAAAN3RSTlMABfD4FfRwEAnivfxMLecdrKCEWzw469fNyLGllHw0JMFqTxnc27V3WEDRjYooDY9hVIFHmmeR04vuzQAAAqtJREFUSMedlut2qjAQhUMABREqeL/j/Vq1tj3f+7/ZEbSUKLbQ/SesWUySmT17JuIJytWg1vEkZqvd29VfRE7MSl0HBYvAzeE36jugh8F6NCsLy3DfVj0JhNNf/MY90GtTSzFqjYGETuMHP22oY+6zwjqUbPAPzxxfQujPRDYOgcm8+SRCD+9dPMdrB30tMrAxCQ3xE7QBlB7NTRNfE7+gBJ8PSZV8iN8xgapqsbb0NJEDQ+RYMQxol0Uu1Ohq6SAd3RX5ULaVLHUIRF5Ukd8UrPEskRtLjsl3l4nIjxHmV05cpCUKoJJEumMgiqBO9/bVppEluE9NYfy7NVg6s6tEkFqGcGxqKfPapp+6bj1e31g+OhoLwE/47oLZTBXS8bbuH/ne0nk3b/GPa4CeqtcplXj1Od07WiELI9Ld/rLJTgecelqpzOO1R/VeiD3sKB9VneGkheOhEm7QiteQjVDRp/V6TYEDVEo6Q3Vn9Fum7jwHyGYzbEc3OcnFtGlyFJmeNdTuckY/9QHzyrLbSvGh3jbgfCf7to4ZfCDdmFdF80qG3ugppXWB478I7RLtOOK1kipqlZUZrZRRByqjOJoltnvhVWkWSiWIOUlDaJjQrn6x2sWJeE1BrT7hs/q2eRMtVUkRrwmUir8FWknOLB2UJAbjH1VW1h3jb8oWS05/6yZiz6qA55Jd8v1BSRTumkr9Fe/U3VsjKj4dJPH5xSfSGDuvY0mdgqtERgUnryu/pG1phab9u7x1R3fXap+03C8Maw9LTRjT45wI3upJsqyhid1MHbiIhSxjp8GovgXdz6DosLLBTyt1Nj3XthLMMLj+v6k5MN+PlPg28eutmRV6erOXsw14/cnIEAfDra6WEqhURR40/s1Jox28itxwJ37Hc6QXvYyznoL/ATBEVpVOMQSmAAAAAElFTkSuQmCC" alt="images">
				<span>Facebook</span>
			</a>
		</li>
		<li>
			<a  id="chiduong" href="https://www.google.com/maps/place/<?=$optsetting['toado']?>" title="title">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAArCAMAAADi+kDuAAABBVBMVEUAAAD////////////////////////+/v76+vr7+/v+/v78/Pz////////////5+fn8/Pz7+/v6+vr9/f38/Pz6+vr////6+vr////////+/v7////7+/v////////////09PT6+vr5+fn8/Pz8/Pz8/Pz7+/v7+/v7+/v////+/v77+/v9/f35+fn////4+Pj////6+vr29vb39/f+/v739/f09PT8/Pz7+/v09PT////4+Pj////////7+/v////y8vL////8/Pz9/f339/f4+Pj5+fn////29vb////39/f////////////09PT6+vr4+Pj////////6+vr////+/v77+/tXo8D/AAAAVHRSTlMA/PPrRfZ3SiwC+fTu5tQwJiAXCPfg3dnXz8a6tq+TZkYdGQcFBO/n5eHb08+/vb2mo6OamY6EfG9sa2FcWVZPQyMO9cixqKGWioWDcldLQzo4EgyjUwgXAAABhUlEQVRIx+WT107DQBBF1zGxTUIaIQ1CCBB6750Uem9n+f9PYRURpVjZtR8R581XOrqj8Y74H7ibCTuxUn4LoYxWLBTRp+BKpRSlTSR5NB+oo14E5FU8HpVg5T/MysKz6ogV9qpe6nW3EFPWiLHl2EKunYyKNq3jVQmuwalHYGO2++2tGZsyRZhUSpd0DpKfOmcGlt77I28Ry1kYrownkY+D4Z5kUjPdBcSrg2FqAmtquLMJ15nBcDYH9nDHhntfOF+GseFOBHnoT3dNzoH/ZdxoHRu25nzLLGidKVhs+PYW1+7gBeTJYHgotbueKyFzXn+WXkb9U/3bYT/bm3yVJTi6y2uuAwfjPc07wLoKNLhRkFtu7feaLjek+eqy+yhp4tY5a1TPjna+UTwIA5kStLXlpZgExWpLmJiJ0c+IMFK7ow9HBMDL00MyI4JwSpeIK4Ix3XUqIiBpu6MU0yIoF53JzkVwtmkzXQvhpFZQ5JsiDKcWWI4IRXZbTZYV4ThPJC7F3+MHKnFd+s5iNOIAAAAASUVORK5CYII=" alt="images">
				<span>Chỉ đường</span>
			</a>
		</li>
	</ul>
</div>
 